delimiter //
    create procedure add_purchase(pur_no varchar(4), c_id varchar(4), e_id varchar(3), p_id varchar(4), pur_qty int(5))
    begin
        set @now = CURRENT_TIMESTAMP();
        if (0 < pur_qty and pur_qty <= (select qoh from products where p_id = pid)) then
            insert into purchases values( pur_no, c_id, e_id, p_id, pur_qty, @now, 
            (select pur_qty*original_price*(1-discnt_rate) from products where p_id = pid));
            update products set qoh = qoh-pur_qty where pid = p_id;
            set @res = '购买成功';
        else
            set @res = '库存量不足';
        end if;
    end
    end //
delimiter ;
//call add_purchase('p111', 'c004', 'e04', 'pr05', '1');

delimiter //
    create procedure add_product(p_id varchar(4), p_name varchar(15), q_oh int(5), q_ohth int(5), o_price decimal(6,2), d_rate decimal(3,2), s_id varchar(2))
    begin
        insert into products values(p_id, p_name, q_oh, q_ohth, o_price, d_rate, s_id);
    end //
delimiter ;
//call add_product('pr11', 'shit', 99, 10, 2.40, 0.10, 's0');

delimiter //
    create TRIGGER after_insert_purchase after INSERT on purchases for each row
    begin
        INSERT into logs (time, table_name, operation, key_value) values( new.ptime, 'purchases', 'insert', new.pur);
        select visits_made+1 into @v_made from `customers` where cid = new.cid;
        select new.ptime into @lasttime;
        update `customers` set last_visit_time = @lasttime, visits_made = @v_made where cid = new.cid;
    end //
delimiter ;

delimiter //
    create TRIGGER after_update_products after update on products for each row
    begin
        INSERT into logs ( table_name, operation, key_value) values(  'products', 'update', new.pid);
    end //
delimiter ;

delimiter //
    create TRIGGER after_update_customers after update on customers for each row
    begin
        INSERT into logs ( table_name, operation, key_value) values(  'vustomers', 'update', new.cid);
    end //
delimiter ;

delimiter //
    create procedure replenish_stocks(p_id varchar(4), pur_qty int(5))
    begin
        SELECT qoh into @now_stock from `products` where pid = p_id;
        update `products` set qoh = (qoh + pur_qty)*2 where pid = p_id;
        set @replenishment = @now_stock + pur_qty;
    end //
delimiter ;
//call replenish_stocks('pr05', 2);
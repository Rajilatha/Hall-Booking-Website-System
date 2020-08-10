SELECT  `hallname` FROM `hallbooking` WHERE Date!=`2020-03-28` OR (SELECT Distinct `hallname` FROM `hallbooking`  where Date=`28-03-2020` AND Time!=`Morning`);


SELECT Distinct `hallname` FROM `hallbooking` where Date="2020-03-28" OR Time!="Morning"

SELECT Distinct `hallname` FROM `hallbooking`  where Date!="2020-03-28";

SELECT Distinct `hallname` FROM `hallbooking` where Date!="2020-03-28" UNION SELECT Distinct `hallname` FROM `hallbooking` where Date="2020-03-28" AND Time!="Morning"

SELECT Distinct `hallname` FROM `hallbooking` where Date!="2020-03-28" UNION SELECT Distinct `hallname` FROM `hallbooking` where Date="2020-03-28" AND Time!="Morning" NOT IN(SELECT `hallname` FROM `hallbooking` WHERE Date="2020-03-28" AND Time="Morning")


SELECT Distinct `hallname` FROM `hallbooking` where Date!="2020-03-28" UNION SELECT Distinct `hallname` FROM `hallbooking` where Date="2020-03-28" AND Time!="Morning" AND `hallname` NOT IN(Date="2020-03-28" AND Time="Morning")
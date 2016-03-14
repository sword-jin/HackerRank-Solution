# brain not work for this.
SELECT
  IFNULL(empId,'Totals') AS EmpId,       -- outer query labels rollup row
  sums.2005, sums.2006, sums.2007,       -- and calculates horizontal sums
  sums.2005 + sums.2006 + sums.2007 AS Sums
FROM (                                   -- inner query groups by employee
  SELECT                                 -- with an expression for each column
    EmpID,
    SUM(IF(Yr=2005,sales,0)) As '2005',
    SUM(IF(Yr=2006,sales,0)) As '2006',
    SUM(IF(Yr=2007,sales,0)) As '2007'
  FROM Sales
  GROUP BY EmpID WITH ROLLUP
) AS sums;

SELECT
    pivot.Doctor, pivot.Professor,
    pivot.Single, pivot.Actor
FROM (
    SELECT
        IF(Occupation='Doctor',Name,NULL) AS 'Doctor',
        IF(Occupation='Professor',Name,NULL) AS 'Professor',
        IF(Occupation='Single',Name,NULL) AS 'Single',
        IF(Occupation='Actor',Name,NULL) AS 'Actor'
    FROM OCCUPATIONS
    HAVING count(*) = count(Name)
    ORDER BY Name
) as pivot;

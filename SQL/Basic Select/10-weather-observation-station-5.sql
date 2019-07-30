Select City,char_LENGTH(City) 
from Station 
Order By Length(City), City asc limit 1; 
Select City,char_LENGTH(City) 
from Station 
Order By Length(City) desc, City desc limit 1;


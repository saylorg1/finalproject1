/* Select customers where the username and password match those passed as parameters */
SELECT * 
from login 
join Name on login.Name = shopper.Name 
where username = :username and password = :password
	
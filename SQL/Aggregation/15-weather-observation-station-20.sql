SELECT ROUND(x.LAT_N,4) from
STATION x, STATION y
GROUP BY x.LAT_N
HAVING SUM(SIGN(1-SIGN(y.LAT_N-x.LAT_N)))/COUNT(*) > .5 LIMIT 1

# sql over. i can't solve them.

select round(ABS(MIN(LAT_N) - MIN(LONG_W)) + ABS(MAX(LAT_N) - MAX(LONG_W)), 4) from STATION;

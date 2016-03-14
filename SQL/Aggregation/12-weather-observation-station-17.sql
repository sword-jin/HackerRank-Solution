select round(LONG_W, 4) from STATION WHERE LAN_T = (select min(LAT_N) from STATION WHERE LAT_N > 38.7780);

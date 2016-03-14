select round(SQRT(POW(MIN(LAT_N) - MIN(LONG_W), 2) + POW(MAX(LAT_N) - MAX(LONG_W), 2)), 4) from STATION;

#!bin/bash

while read line
do
 A=`cut -f1 <<<"$line"` 
 B=`cut -f2 <<<"$line"` 
 C=`cut -f3 <<<"$line"` 
 echo "$A $B $C"
done
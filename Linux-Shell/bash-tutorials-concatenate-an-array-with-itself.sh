for line in `cat`; do
    countries=( "${countries[@]}" $line )
done

countries=("${countries[@]}" "${countries[@]}" "${countries[@]}")
echo "${countries[@]}"
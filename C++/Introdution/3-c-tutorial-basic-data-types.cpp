#include <iostream>
#include <cstdio>

using namespace std;

int main(int argc, char const *argv[])
{
    int variable_int;
    long variable_long;
    long long variable_ll;
    char variable_char;
    float variable_float;
    double variable_double;

    scanf("%d %ld %lld %c %f %lf", &variable_int, &variable_long, &variable_ll, &variable_char, &variable_float, &variable_double);

    printf("%d\n%ld\n%lld\n%c\n%f\n%lf\n", variable_int, variable_long, variable_ll, variable_char, variable_float, variable_double);

    return 0;
}

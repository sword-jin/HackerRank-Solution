#include <stdio.h>

int main(){
    int n;
    scanf("%d",&n);
    int arr[n];
    for(int arr_i = 0; arr_i < n; arr_i++){
       scanf("%d",&arr[arr_i]);
    }
    float positive;
    int positive_number = 0;
    float negative;
    int negative_number = 0;
    float zero;
    int zero_number = 0;
    for(int arr_i = 0; arr_i < n; arr_i++){
        if (arr[arr_i] > 0) {
            positive_number ++;
        } else if (arr[arr_i] == 0) {
            zero_number ++;
        } else {
            negative_number ++;
        }
    }
    positive = positive_number / (float)n;
    negative = negative_number / (float)n;
    zero = zero_number / (float)n;
    printf("%f\n", positive);
    printf("%f\n", negative);
    printf("%f\n", zero);
    return 0;
}

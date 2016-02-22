#include <stdio.h>

int main(){
    int n;
    scanf("%d",&n);
    int arr[n];
    for(int arr_i = 0; arr_i < n; arr_i++){
       scanf("%d",&arr[arr_i]);
    }
    int result = 0;
    for(int arr_i = 0; arr_i < n; arr_i++){
       result += arr[arr_i];
    }
    printf("%d", result);
    return 0;
}

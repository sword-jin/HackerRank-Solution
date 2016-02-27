#include <stdio.h>

int main(){
    int t;
    scanf("%d",&t);
    for(int a0 = 0; a0 < t; a0++){
        unsigned long long int b;
        unsigned long long int w;
        scanf("%llu %llu",&b,&w);
        unsigned long long int x;
        unsigned long long int y;
        unsigned long long int z;
        scanf("%llu %llu %llu",&x,&y,&z);

        if (x + z <= y) {
            printf("%llu\n", (b + w) * x + w * z);
        } else if (y + z <= x) {
            printf("%llu\n", b * z + (b + w) * y);
        } else {
            printf("%llu\n", b * x + w * y);
        }
    }
    return 0;
}

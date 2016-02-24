#include <stdio.h>
#include <string.h>
#include <stdlib.h>

int main(){
    int n;
    scanf("%d",&n);
    char* s = (char *)malloc(10240 * sizeof(char));
    scanf("%s",s);
    int k;
    scanf("%d",&k);

    int i = 0;
    char ch;
    while (s[i] != '\0') {
        if (s[i] >= 'a' && s[i] <= 'z') {
            ch = 'a';
            s[i] = ch + (s[i] - ch + k) % 26;
        } else if (s[i] >= 'A' && s[i] <= 'Z') {
            ch = 'A';
            s[i] = ch + (s[i] - ch + k) % 26;
        }

        i ++;
    }

    printf("%s\n", s);

    return 0;
}

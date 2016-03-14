#include <stdio.h>
#include <string.h>

int main(int argc, char const *argv[])
{
    char small[26] = {0};
    char big[26] = {0};
    int i, n;
    char s[1000];
    while (scanf("%s", &s[strlen(s)]) == 1);
    n = strlen(s);
    for (int i = 0; i < n; i++) {
        if (s[i] >= 'a' && s[i] <= 'z') {
            small[s[i] - 'a'] = 1;
        }
        else if (s[i] >= 'A' && s[i] <= 'Z') {
            big[s[i] - 'A'] = 1;
        }
    }

    for (int i = 0; i < 26; i++) {
        if (!(big[i] == 1 || small[i] == 1)) {
            printf("not pangram");
            return 0;
        }
    }

    printf("pangram");

    return 0;
}

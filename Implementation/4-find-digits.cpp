#include <iostream>

using namespace std;

int main(){
    int t;
    cin >> t;
    for(int a0 = 0; a0 < t; a0++){
        int n, m;
        int digit_count = 0;
        cin >> n;
        m = n;

        while(m > 0) {
            int curr_digit = m % 10;
            m /= 10;
            if (curr_digit != 0 && n % curr_digit == 0) {
                digit_count ++;
            }
        }

        cout << digit_count << endl;
    }
    return 0;
}

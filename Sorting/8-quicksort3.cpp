#include <cmath>
#include <cstdio>
#include <vector>
#include <iostream>
#include <algorithm>
using namespace std;

void quicksort(vector<int> &vec, int startIndex, int pivotIndex)
{
    int pivot, index, isgreater;
    int arraySize = pivotIndex - startIndex;
    pivot = vec[pivotIndex];

    if (arraySize > 0) {
        index = startIndex;
        isgreater = 0;
        for(int i=startIndex;i<pivotIndex;i++) {
            if (vec[i]<=pivot) {
                if(isgreater == 1) {
                    swap(vec[i], vec[index]);
                }
                index++;
            } else
                isgreater = 1;
        }
        swap(vec[index], vec[pivotIndex]);

        for(int i : vec) {
            cout << i << " ";
        }
        cout << endl;

        quicksort(vec, startIndex, index-1);
        quicksort(vec, index+1, pivotIndex);
    }
}

int main() {
    /* Enter your code here. Read input from STDIN. Print output to STDOUT */
    int size;
    vector<int> vec;
    cin >> size;
    for(int i = 0; i<size; i++) {
        int dummy;
        cin >> dummy;
        vec.push_back(dummy);
    }
    quicksort(vec, 0, size-1);
    return 0;
}

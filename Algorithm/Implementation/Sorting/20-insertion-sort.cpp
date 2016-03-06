/* Enter your code here. Read input from STDIN. Print output to STDOUT */
#include <iostream>
#include <algorithm>
#include <cmath>
#include <stdio.h>

using namespace std ;

long long cnt=0 ;

void merge(int a[],int p,int q,int r)
{
    int l1[q-p+1] ;
    int r1[r-q] ;
    int n1=q-p+1 ;
    int n2=r-q ;
    int pos1=0,pos2=0 ;
    for(int i=p;i<=q;i++)
        l1[pos1++]=a[i] ;
    for(int i=q+1;i<=r;i++)
        r1[pos2++]=a[i] ;
    int size=pos1 ;
    int pos3=p ;
    pos1=pos2=0 ;
    while(pos1<n1 && pos2<n2){
        if(l1[pos1]>r1[pos2]){
            cnt+=size-pos1 ;
            a[pos3++]=r1[pos2++] ;
        }else
            a[pos3++]=l1[pos1++] ;
    }
    if(pos1>=n1){
        while(pos2<n2)
            a[pos3++]=r1[pos2++] ;
    }else{
        while(pos1<n1)
            a[pos3++]=l1[pos1++] ;

    }
}

void merge_sort(int a[],int p,int r)
{
    if(p<r){
        int q=(p+r)/2 ;
        merge_sort(a,p,q) ;
        merge_sort(a,q+1,r) ;
        merge(a,p,q,r) ;
    }
}

int main()
{
    int t ;
    scanf("%d",&t) ;
    while(t) {
        int n ;
        scanf("%d",&n) ;
        int A[n] ;
        for(int i=0;i<n;i++)
            scanf("%d",&A[i]) ;
        merge_sort(A,0,n-1) ;
        cout << cnt << endl ;
        cnt = 0 ;
        t-- ;
    }
    return 0 ;
}

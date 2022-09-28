#include <iostream>
#include <stdint.h>
using namespace std;

int main(){
    int arr[]{1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19};
    int highest{INT32_MIN};
    int second_highest{highest};

    for(auto num: arr){
        if(num>highest){
            second_highest = highest;
            highest = num;
        }
    }

    cout << highest << "\n" << second_highest << endl;
}
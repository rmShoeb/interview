#include <iostream>
using namespace std;

int main(){
    int arr[]{1,2,3,4,5};
    int size{5};
    int temp{0};

    for(int i=0; i<size/2; i++){
        temp = arr[i];
        arr[i] = arr[size-i-1];
        arr[size-i-1] = temp;
    }

    for(int i=0; i<size; i++)
        cout << arr[i] << " ";
    cout << endl;

    return 0;
}
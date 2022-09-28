#include <iostream>
using namespace std;

int main(){
    int n{0};
    cin >> n;

    while(n%3 != 0) n--;
    while(n>3){
        cout << n << " ";
        n -= 3;
    }
    cout << endl;

    return 0;
}
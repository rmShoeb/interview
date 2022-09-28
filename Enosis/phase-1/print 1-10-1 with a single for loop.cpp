#include <iostream>
#include <stdbool.h>
using namespace std;

int main(int argc, char const *argv[]){
    int i{1};
    bool descend{false};

    while(true){
        cout << i << " ";
        if(!descend){
            if(i==10){
                descend=true;
                i--;
            }
            else i++;
        }
        else{
            if(i==1) break;
            else i--;
        }
    }
    cout << endl;
    return 0;
}

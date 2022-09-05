#include <iostream>
#include <stdbool.h>
using namespace std;

int main(int argc, char const *argv[]){
    int i{10};
    bool ascend{false};

    while(true){
        cout << i << " ";
        if(!ascend){
            if(i==1){
                ascend=true;
                i++;
            }
            else i--;
        }
        else{
            if(i==10) break;
            else i++;
        }
    }
    cout << endl;
    return 0;
}

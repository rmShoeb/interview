#include <iostream>
#include <vector>
#include <string>
using namespace std;

void word_count(string s){
    vector<int> lengths;
    int count{0};

    for (auto c : s){
        if (c == ' '){
            if (count != 0)
                lengths.push_back(count);
            count = 0;
        }
        else count++;
    }
    if (count != 0) lengths.push_back(count);
    
    cout << "Number of words: " << lengths.size() << "\n"
         << "Number of characters in the fist word: " << lengths.front() << "\n"
         << "Number of characters in the last word: " << lengths.back()
         << endl;
}

int main(int argc, char const *argv[]){
    word_count("Hello world");
    return 0;
}

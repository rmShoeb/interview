#include <iostream>
#include <vector>
using namespace std;

void print_primes(int n)
{
    vector<bool> is_prime(n*10, true);
    int length = static_cast<int>(is_prime.size());

    for (int i=0; i<length; i++)
    {
        if (is_prime[i])
        {
            printf("%d\n", i+2);
            n--;
            if(n==0) break;
            for (int j=2; ((i+2)*j)-2<length; j++)
                is_prime[((i+2)*j)-2] = false;
        }
    }
}

int main(){
    print_primes(100);
    return 0;
}
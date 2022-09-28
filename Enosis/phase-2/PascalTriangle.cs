using System;

class Program{
    static void Main(string[] args){
    	int n = 15;
        var tri = new int [n,n];
        
        for(int r=0; r<n; r++){
        	for(int c=0; c<=r; c++){
            	if(c==0 || c==r) tri[r,c] = 1;
                else tri[r,c] = tri[r-1,c-1]+tri[r-1,c];
                Console.Write($"{tri[r,c]} ");
            }
            Console.WriteLine();
        } 
	}
}
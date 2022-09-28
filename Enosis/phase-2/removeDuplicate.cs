using System;
using System.Text;
using System.Collections.Generic;

class Program{
	static void Main(string[] args){
    	string str = "aabbc@cd";
        var sb = new StringBuilder();
        var s = new Stack<char>();
        foreach(var c in str){
        	if(s.Count==0) s.Push(c);
            else if(s.Peek()=='@'){
            	s.Pop();
                if(s.Peek()==c) s.Pop();
                else{
                	s.Push(c);
                    s.Push('@');
                }
            }
            else{
            	if(s.Peek()==c) s.Pop();
                else s.Push(c);
            }
        }
        foreach(var c in s) sb.Append(c);
    	Console.WriteLine($"{sb}");
    }
}
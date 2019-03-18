/**
 * Created by ryanh on 2017-08-03.
 */
function Function1(a){                // param1 * param2 / param3 * param4 / param5…
    c = String(Math.floor(Math.random()*9 )+1) ;
    for(i = 1; i < a; i++) {
        c += String(Math.floor(Math.random()*9)+1);
    }
    return c;
}

function Function2(a){     //Convert to uppercase

    var a;
    var b = "";
    for (var i = 0; i <= a.length - 1; i++)
    {
        if (a[i].charCodeAt(0) > 64 && a[i].charCodeAt(0) < 91)
        {
            b += String.fromCharCode((a[i].charCodeAt(0)) + 32);
        }
        else{
            b += a[i];
        }
    }
    return b;
}


    function Function3(a,b){   //removes whitespace from both ends of the receiving string

for(var i = 0; i<b; i++) {
     a+= " ";
                      
}
        return a;
}




function Function4(a, b){   //adds a specified character a specified amount of times to the beginning of the string and returns a new string

         b = [a.length+1];
       var  c = [a.length];
for (var i = a.length-1,x = 0; i>=0; --i, x++)
    {
        b[x] = a[i];
        c[x] = b[x].charCodeAt();
    }
return c;
}



function Function5(a,b,c){  //splits the receiving string parameter into an array of strings by separating the string into substrings and return the array.
    var  i = 0;
    var d="";
    while (i< c){
        d += a[i];
        i++;
    }                     
    d += b ;
    for(; i<a.length;i++){
     d += a[i]
    }
    return d;
}

function Function6(a){   //Write a function which returns the smallest value of the parameters it receives. 

    var b = 0;
for(var i = 1, x = 2; i < arguments.length; i+=2 , x+=2){
    a += arguments[i] ;
    b -= arguments[x];
}
    a = a + b;
return a;
}

function Function7(a, b) {    // function to return an array of duplicate elements from two array arguments

    var c = [];
    var d = [];
    var my_array = [];


 my_array[my_array.length] = a;
my_array[my_array.length] = b;
var no_unique_elements = d.length;
    for (var i = 0; i < no_unique_elements; i++)
    {
        for (var j = i+1; j < no_unique_elements; j++)
        {
            if(d[i] == d[j])
            {


                my_array[j] = my_array[no_unique_elements-1];

                no_unique_elements--;

                j--;
            }
        }
    }
return my_array;

 
function Function8(a,b){        // accepts an array and a value to find and return last element is smaller than given value
    for (var i =0; i< a.length; i++ )

    if(b > a[i]){
    return true;        
    }
    else{return false;}
    }
}
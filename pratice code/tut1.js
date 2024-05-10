// pattern 1
var n = 5;
for(i=0;i<=n;i++)
{
    let str = "* ";
    console.log(str.repeat(i));
}

// pattern 2
 var n= 5;
for (let i = 1; i <= n; i++) {
	let str = "* ";
	let space = ' ';
	console.log(space.repeat((n-i))+str.repeat(i));
}





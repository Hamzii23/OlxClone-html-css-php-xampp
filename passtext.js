window.addEventListener('load',()=>{
    const params=(new URL(document.location)).searchParams;
    const result=params.get("email");
    document.getElementById("passtext").innerHTML=result;
})
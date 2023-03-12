function ac(){
    let eng=document.getElementsByTagName("Input")[3].value;
    let urdu=document.getElementsByTagName("Input")[5].value;
    let math=document.getElementsByTagName("Input")[7].value;
    let physics=document.getElementsByTagName("Input")[9].value; 
    let bioCom=document.getElementsByTagName("Input")[11].value;
    let chem=document.getElementsByTagName("Input")[13].value; 
    let isl=document.getElementsByTagName("Input")[15].value;
    let pst=document.getElementsByTagName("Input")[17].value; 
    let tEng=document.getElementsByTagName("Input")[4].value;
    let tUrdu=document.getElementsByTagName("Input")[6].value; 
    let tMath=document.getElementsByTagName("Input")[8].value;
    let tPhysics=document.getElementsByTagName("Input")[10].value;
    let tBioCom=document.getElementsByTagName("Input")[12].value;
    let tchem=document.getElementsByTagName("Input")[14].value;
    let tIsl=document.getElementsByTagName("Input")[16].value;
    let tPst=document.getElementsByTagName("Input")[18].value; 
    
    let securedmarks=Number(eng)+Number(urdu)+Number(math)+Number(physics)+Number(bioCom)+Number(chem)+Number(isl)+Number(pst);
    smarks.value= securedmarks;
    let totalMarks=Number(tEng)+Number(tUrdu)+Number(tMath)+Number(tPhysics)+Number(tBioCom)+Number(tchem)+Number(tIsl)+Number(tPst);
    tmarks.value=totalMarks;
    let percntge=(securedmarks/totalMarks)*100
    marksprcnt.value=percntge;
    // let n=`Total Obtained Marks are ${totalobtainedMarks}`;
    // let m=`Total Marks of Paper are ${totalMarks}`;
    // console.log(n);
    // console.log(m);
    console.log(percntge);
        if(percntge>=40){
            freslt.value="Pass";
    }
    else{
        freslt.value="Fail";
    }
    
    if(percntge>=80 ){
        sgrade.value='A+';
    }
    else if(percntge>=70 && percntge <=79 ){
        sgrade.value='A';
    }
    else if(percntge>=60 && percntge <=69 ){
        sgrade.value='B';
    }else if(percntge>=50 && percntge <=59 ){
        sgrade.value='C';
    }else if(percntge>=40 && percntge <=49 ){
        sgrade.value='D';
    }else{
        sgrade.value='Bhai tera koi grade nhi Sorry :(';
    }

}
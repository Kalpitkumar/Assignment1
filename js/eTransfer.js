function validateTransfer(){  
    var name=document.transferForm.username.value;  
    var amount=document.transferForm.amount.value;  

    var balance = 5000.00;  
    if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
    }else if(amount>balance || amount<=0){  
      alert("Not Enough Balance");  
      return false;  
      }  
    else if(amount>0 && amount <=balance)
    {
        alert(`Money send!`+`\n` +`$`+`${amount} was send`);
        balance = balance - amount;
        document.getElementById("amount").innerHTML="$ "+balance+" >"
        return false;
    }
    }  
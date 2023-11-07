/*
var time = prompt("hey what's the time: ");
       if (time>5 && time<17){
           alert("Good Mornig");
       }
       else if (time>12 && time<17) {
           alert("Good Afternoon")
       }
       else if(time>17 && time<21){
           alert("Good evenig");
       } else {
           alert ("Good Night");
       }
       */
    
       var fruittype = prompt("Ki fol lagbe bolun?");
       switch (fruittype) {
                  case 'Tormuj':
                   console.log('Tormuj holo 40rs kilo.');
                    break;

                  case 'Lichu':
                   document.write('Lichu holo 50sr kilo.');
                   break;

                   case 'Sosa':
                       document.write('sosa holo 20rs kilo.');
                   break;

                   case 'shakalu':
                      document.write('shakalu holo 30rs kilo.');
                      break;

                   case 'Aam':
                          document.write('Aam holo 80rs kilo.');
                          break;

                          case 'Angur':
                          document.write('Angur holo 90rs kilo.');
                          break;

                          default:
                              console.log('${fruittype} Ota aj ses hoye geche go sorry.');
       }
    document.write("Ar kichu lagbe?");
       


    
/**
 * 
 */


function getDashboardData(){
    NewOrders()

    async2Call ()

    
}

async function NewOrders(){
    try {
        const response = await fetch('http://localhost:8080/dashboard');
        const html = await response.text();
    
        // Parse the HTML string
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
    
        // Find the <h3> element and extract its value
        const element = doc.getElementById('getNewOrders');
        const value = element.textContent;
        
        console.log('Retrieving New Orders');
        const result = await resolveAfter2Seconds();
        console.log("New Orders: " +value); 
        return value;
      } catch (error) {
        console.error(error);
      }
}
    
function resolveAfter2Seconds(){
    return new Promise(resolve => {
        setTimeout(() => {
            resolve('Resolved after 2 seconds');
        }, 2000);
    });
}
    
async function async2Call(){
    console.log('Calling');
    const result = await resolveAfter2Seconds();
    console.log(result);
    //Expected output: "resolved"
}


window.onload = getDashboardData();
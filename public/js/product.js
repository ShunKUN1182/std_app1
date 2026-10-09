// 作品情報

// https:153.127.69.211/ecc/sfukusima/std_app1/products/
const apiURL = "http://153.127.69.211/ecc/sfukusima/std_app1/products/";

async function getAPI() {
    try {
        const response = await fetch(apiURL);
        const data = await response.json();
        console.log(data);
    } catch (error) {
        console.log(error);
    }
}

getAPI();

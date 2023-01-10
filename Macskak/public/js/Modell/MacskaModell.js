class Macskamodell {
    adatBe(vegpont, myCallBack) {
        fetch(vegpont, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        })
            .then((response) => response.json())
            .then((data) => {
                this.#macskak = data.konyv;
                myCallBack(this.#macskak);
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }
}
export default Macskamodell;

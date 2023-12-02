const express = require("express");

const supa = require("./database.js");
const cors = require("cors");
const app = express();

app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use(cors());
const port = 3000;

app.get("/", (req, res) => {
    res.send("Backend API is running 🎉");
});
app.listen(port, () => {
    console.log(`Example app listening at http://localhost:${port}`);
});

app.post("/signUp", async function (req, res) {
    var username = req.body["name"];
    var password = req.body["password"];

    const { error } = await supa.supaClient
        .from("users")
        .insert({ username: username, password: password });

    if (error) {
        res.status(404).json({
            status: 404,
            error: "Cannot make user",
            data: [],
        });
    } else {
        res.status(200).json({
            status: 200,
            statusText: "OK",
            data: "",
        });
    }
});

app.post("/login", async function (req, res) {
    var username = req.body["name"];
    var password = req.body["password"];

    const { data, error } = await supa.supaClient
        .from("users")
        .select()
        .eq("username", username)
        .eq("password", password);

    if (data[0] == null) {
        res.status(404).json({
            status: 404,
            error: "Cannot verify login information",
            data: [],
        });
    } else {
        res.status(200).json({
            status: 200,
            statusText: "OK",
            data: "",
        });
    }
});

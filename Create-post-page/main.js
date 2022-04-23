/* Is this the main JavaScript File which is work by magic */
/* <button id="displayBlock">Add Post</button> (displayBlock) is the main id which are click 
    to open a Post page like Facebook post page */

const hide = document.getElementById("addPost");
const post = document.getElementById("displayBlock");
const visible = document.getElementById("magic");

post.addEventListener("click", () => {
    hide.style.display = "block";
})

visible.addEventListener("click", () => {
    hide.style.display = "none";
})
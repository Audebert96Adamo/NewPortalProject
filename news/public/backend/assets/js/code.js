const button = document.getElementById("toast-button");
const toastMessageContainer = document.getElementsByClassName("toast-msg");

function errorNotification(message) {
    const notif = document.createElement("div");
    notif.classList.add("toast-msg");
    notif.innerText = message;

    toastMessageContainer.appendChild(notif);
    setTimeout(() => {
        toastMessageContainer.remove();
    }, 3000);
}

function successNotification(message) {
    const notif = document.createElement("div");
    notif.classList.add("toast-msg");
    notif.innerText = message;

    toastMessageContainer.appendChild(notif);
    setTimeout(() => {
        toastMessageContainer.remove();
    }, 3000);
}

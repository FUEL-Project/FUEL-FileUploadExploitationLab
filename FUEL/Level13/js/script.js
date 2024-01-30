document.addEventListener("DOMContentLoaded", function() {
    const fileGrid = document.getElementById("fileGrid");
    const newContentTextarea = document.getElementById("newContent");
    const filenameInput = document.getElementById("filename");
    fetch("get_files.php")
        .then(response => response.json())
        .then(fileList => {
            fileList.forEach(filename => {
                const card = document.createElement("div");
                card.classList.add("col-md-4", "mb-4");
                
                const cardContent = `
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">${filename}</h5>
                            <button class="btn btn-primary btn-sm update-button">Update</button>
                            <a class="btn btn-secondary btn-sm view-button" href="/uploads/lvl13/${filename}" target="_blank">View Content</a>
                        </div>
                    </div>
                `;
                card.innerHTML = cardContent;
                
                card.querySelector(".update-button").addEventListener("click", function() {
                    newContentTextarea.value = "";
                    filenameInput.value = filename;
                    document.querySelector(".update-section").style.display = "block";
                });
                
                fileGrid.appendChild(card);
            });
        })
        .catch(error => {
            console.error("Error:", error);
        });
    
    document.getElementById("updateForm").addEventListener("submit", function(event) {
        event.preventDefault();
        
        const newContent = newContentTextarea.value;
        const filename = filenameInput.value;

        fetch("update.php", {
            method: "PUT",
            headers: {
                "Content-Type": "text/plain",
                "X-Filename": filename  
            },
            body: newContent + "\n"
        })
        .then(response => response.text())
        .then(result => {
            alert(result);
        })
        .catch(error => {
            console.error("Error:", error);
        });
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const btnGenerate = document.querySelector("#generate-pdf");

    btnGenerate.addEventListener("click", function() {
        const contentpdf = document.querySelector("#contentpdf");

        const options = {
            margin: [10, 10, 10, 10],
            filename: "visaogeral.pdf",
            html2canvas: { scale: 2 },
            jsPDF: { unit: "mm", format: "a4", orientation: "portrait" }
        };

        html2pdf().set(options).from(contentpdf).save();
    });
});

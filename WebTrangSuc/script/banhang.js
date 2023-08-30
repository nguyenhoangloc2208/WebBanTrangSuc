document.addEventListener("DOMContentLoaded", function () {
    const productTable = document.getElementById("bang");
    const totalAmountCell = document.getElementById("tong");
    const priceFilters = document.getElementById("priceFilters");
    const products = [
        { name: "Dây chuyền bạc mặt thánh giá", price: 699000 },
        { name: "Lắc tay vàng charm hồ điệp", price: 1809000 },
        { name: "Hoa tai bạc hình hoa anh đào", price: 459000 },
        { name: "Mặt dây chuyền bạc đính đá kim cương", price: 11325000 },
        { name: "Đồng hồ mạ vàng Adriatica", price: 2189000 },
        { name: "Nhẫn vàng khắc hình rồng", price: 14899000 },
        { name: "Đồng hồ dây da màu hồng mộng mơ", price: 999999 },
        { name: "Dây chuyền vàng kép mặt dây hình trái tim", price: 459000 },
        { name: "Dây chuyền vàng mặt vòng hoa nguyệt quế", price: 769000 },
        { name: "Cặp nhẫn đính hôn nạm đá màu rosegold", price: 18899000 },
        { name: "Khuyên tai vàng nạm kim cương tự nhiên", price: 22099000 },
        { name: "(Mua 1 tặng 1 - nhẫn vàng) Dây chuyền vàng", price: 209000 },
    ];

    const tbody = productTable.querySelector("tbody");

    products.forEach((product, index) => {
        const newRow = tbody.insertRow();
        newRow.innerHTML = `
        <td><input type="checkbox" class="checkbox" data-index="${index}"></td>
        <td>${product.name}</td>
        <td>${product.price} VND</td>
        <td><input type="number" class="quantity" data-index="${index}" disabled></td>
        <td class="subtotal">0 VND</td>
      `;
    });

    const checkboxes = document.querySelectorAll(".checkbox");
    const quantities = document.querySelectorAll(".quantity");
    const subtotals = document.querySelectorAll(".subtotal");

    checkboxes.forEach((checkbox, index) => {
        checkbox.addEventListener("change", function () {
            quantities[index].disabled = !this.checked;
        
        if (!this.checked) {
            quantities[index].value = "";
        } else {
            quantities[index].value = 1;
        }

        updateSubtotal(index);
        updateTotalAmount();
        });
    });

    quantities.forEach((quantity, index) => {
        quantity.addEventListener("input", function () {
            updateSubtotal(index);
            updateTotalAmount();
        });
    });

    const filterButton = document.getElementById("filterButton");
    filterButton.addEventListener("click", function () {
        const priceRangeSelect = document.getElementById("priceRange");
        const selectedRange = priceRangeSelect.value;
        const [minPrice, maxPrice] = selectedRange.split("-").map(Number);

        products.forEach((product, index) => {
            const price = product.price;
            const row = productTable.rows[index + 1]; 
            if (price >= minPrice && price <= maxPrice) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });

        updateFilteredTotalAmount();
    });

    const priceFilterButton = document.getElementById("priceFilterButton");
    priceFilterButton.addEventListener("click", function () {
        priceFilters.classList.toggle("hidden");
    });

    function updateSubtotal(index) {
        const quantity = quantities[index].value || 0;
        const price = products[index].price;
        const subtotal = quantity * price;
        const subtotalString = subtotal.toLocaleString("it-IT", { style: "currency", currency: "VND" });
        subtotals[index].textContent = `${subtotalString}`;
    }

    function updateTotalAmount() {
        let totalAmount = 0;
        subtotals.forEach((subtotal) => {
            const amount = parseInt(subtotal.textContent.replace(/\./g, ""));
            totalAmount += isNaN(amount) ? 0 : amount;
        });
        const totalAmountString = totalAmount.toLocaleString("it-IT", { style: "currency", currency: "VND" });
        totalAmountCell.textContent = `${totalAmountString}`;
    }

    function updateFilteredTotalAmount() {
        let totalAmount = 0;

        products.forEach((product, index) => {
            const price = product.price;
            const row = productTable.rows[index + 1]; 

            if (row.style.display !== "none") {
                const quantity = quantities[index].value || 0;
                const subtotal = quantity * price;
                totalAmount += subtotal;
            }
        });

        const totalAmountString = totalAmount.toLocaleString("it-IT", { style: "currency", currency: "VND" });
        totalAmountCell.textContent = `${totalAmountString}`;
    }
});

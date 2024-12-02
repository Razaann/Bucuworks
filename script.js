function showOrderForm(product) {
    const orderPanel = document.getElementById("order-panel");
    const selectedProductName = document.getElementById("selected-product-name");
    const dynamicForm = document.getElementById("dynamicForm");
    const selectedProductInput = document.getElementById("selectedProduct"); // Ambil input hidden

    // Isi nilai produk yang dipilih ke input hidden
    selectedProductInput.value = product;

    // Update teks nama produk yang dipilih
    selectedProductName.textContent = product;
    dynamicForm.innerHTML = ""; // Reset form dinamis

    // Tambahkan elemen formulir dinamis berdasarkan produk
    // Add dynamic form elements based on selected product
    if (product === "Furniture") {
        dynamicForm.innerHTML = `
            <div class="form-group">
                <label for="productType">Type Of Product:</label>
                <select id="productType" name="productType" required>
                    <option value="Meja">Table</option>
                    <option value="Kursi">Chair</option>
                    <option value="Divan">Divan</option>
                    <option value="Lemari">Closet</option>
                    <option value="Cermin">Mirror</option>
                </select>
            </div>

            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" id="color" name="color" required>
            </div>

            <div class="form-group">
                <label for="material">Material:</label>
                <select id="material" name="material" required>
                    <option value="Logam">Steel</option>
                    <option value="Kayu">Wood</option>
                </select>
            </div>

            <div class="form-group">
                <label for="budget">Budget:</label>
                <input type="text" id="budget" name="budget" required>
            </div>
        `;
    }
    else if (product === "Interior") {
        dynamicForm.innerHTML = `
            <div class="form-group">
                <label for="productType">Type Of Product:</label>
                <select id="productType" name="productType" required>
                    <option value="Living Room">Living Room</option>
                    <option value="Bedroom">Bedroom</option>
                    <option value="Restaurant">Restaurant</option>
                    <option value="Office">Office</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="theme">Theme:</label>
                <input type="text" id="theme" name="theme" required>
            </div>
    
            <div class="form-group">
                <label for="budget">Budget:</label>
                <input type="text" id="budget" name="budget" required>
            </div>
        `;
    } 
    else if (product === "Exterior") {
        dynamicForm.innerHTML = `
            <div class="form-group">
                <label for="productType">Type Of Product:</label>
                <select id="productType" name="productType" required>
                    <option value="Fasad">Facade</option>
                    <option value="Pagar">Fences</option>
                    <option value="Taman">Park</option>
                    <option value="Atap">Roof</option>
                    <option value="Jendela dan Pintu">Windows & Door</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="theme">Theme:</label>
                <input type="text" id="theme" name="theme" required>
            </div>
    
            <div class="form-group">
                <label for="budget">Budget:</label>
                <input type="text" id="budget" name="budget" required>
            </div>
        `;
    }
    

    // Tampilkan panel form pemesanan
    orderPanel.style.display = "block";
}

<?php get_header(); ?>
    <?php echo do_shortcode('[woocommerce_checkout]'); ?>
<?php get_footer(); ?>
<style>
    /* General form styling */
form.checkout {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 0 auto;
}

/* Headings styling */
form.checkout h3 {
    font-family: 'Arial', sans-serif;
    color: #333;
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 20px;
    text-transform: uppercase;
    border-bottom: 2px solid #ececec;
    padding-bottom: 10px;
}

/* Column layout for customer details */
.col2-set {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

.col-1, .col-2 {
    width: 48%;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    border: 1px solid #e0e0e0;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
}

/* Form input styling */
form.checkout input[type="text"], 
form.checkout input[type="email"], 
form.checkout input[type="tel"], 
form.checkout input[type="password"], 
form.checkout select, 
form.checkout textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #dcdcdc;
    border-radius: 5px;
    background-color: #fff;
    font-size: 16px;
    box-sizing: border-box;
}

form.checkout input:focus, 
form.checkout select:focus, 
form.checkout textarea:focus {
    outline: none;
    border-color: #0071a1;
}

/* Order review box */
#order_review {
    margin-top: 30px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #e6e6e6;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
}

/* Order table styling */
#order_review table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

#order_review table th, 
#order_review table td {
    text-align: left;
    padding: 15px;
    border-bottom: 1px solid #ddd;
}

#order_review table th {
    background-color: #f5f5f5;
    font-weight: bold;
}

#order_review table .product-name {
    font-size: 16px;
}

#order_review table .product-total {
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

/* Button styling */
form.checkout button {
    background-color: #0071a1;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    padding: 15px 25px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    text-transform: uppercase;
    transition: background-color 0.3s ease;
}

form.checkout button:hover {
    background-color: #005f8b;
}

/* Responsive styling for mobile */
@media (max-width: 768px) {
    .col2-set {
        flex-direction: column;
    }

    .col-1, .col-2 {
        width: 100%;
    }

    form.checkout {
        padding: 20px;
    }
}

</style>
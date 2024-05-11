function calculateBudget() {
    var income = parseFloat(document.getElementById('income').value);

    var totalCategoryExpenses = 0;
    var categoryInputs = document.querySelectorAll('#expenseCategories input[type="number"]');
    categoryInputs.forEach(function(input) {
        totalCategoryExpenses += parseFloat(input.value) || 0;
    });

    var balance = income - totalCategoryExpenses;

    var resultContainer = document.getElementById('result');
    resultContainer.innerHTML = '<p>Total Expenses: ₹' + totalCategoryExpenses.toFixed(2) + '</p>';
    resultContainer.innerHTML += '<p>Balance: ₹' + balance.toFixed(2) + '</p>';
}

function addExpenseCategory() {
    var container = document.getElementById('expenseCategories');
    var numCategories = container.querySelectorAll('.input-container').length + 1;

    var newCategoryContainer = document.createElement('div');
    newCategoryContainer.classList.add('input-container');

    var newLabel = document.createElement('label');
    newLabel.setAttribute('for', 'category' + numCategories);
    newLabel.textContent = 'Category ' + numCategories + ':';
    
    var newCategoryInput = document.createElement('input');
    newCategoryInput.type = 'text';
    newCategoryInput.id = 'category' + numCategories;
    newCategoryInput.placeholder = 'Expense category';

    var newAmountInput = document.createElement('input');
    newAmountInput.type = 'number'; // Set the input type to number for numerical values
    newAmountInput.id = 'amount' + numCategories; // Set a unique id for each amount input
    newAmountInput.placeholder = 'Amount'; // Placeholder text for the amount input

    var removeButton = document.createElement('button');
    removeButton.textContent = 'Remove';
    removeButton.onclick = function() {
        removeCategory(newCategoryContainer);
    };

    // Append the label, category input, amount input, and remove button to the new category container
    newCategoryContainer.appendChild(newLabel);
    newCategoryContainer.appendChild(newCategoryInput);
    newCategoryContainer.appendChild(newAmountInput);
    newCategoryContainer.appendChild(removeButton);

    // Append the new category container to the main container
    container.appendChild(newCategoryContainer);
} 

function removeCategory(button) {
    var container = button.parentElement; // Get the container of the category
    container.remove(); // Remove the entire category container
    }
    

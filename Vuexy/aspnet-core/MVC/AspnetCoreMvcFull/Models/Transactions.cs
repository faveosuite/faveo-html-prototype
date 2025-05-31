using System;
using System.ComponentModel.DataAnnotations;
using System.Reflection;

namespace AspnetCoreMvcFull.Models
{
  public class Transactions
  {
    public int Id { get; set; }
    [StringLength(60, MinimumLength = 2, ErrorMessage = "Customer name must be between 2 and 60 characters")]
    [Required(ErrorMessage = "Customer name is required")]
    public string? Customer { get; set; }
    [Display(Name = "Transaction Date")]
    [DataType(DataType.Date)]
    [Required(ErrorMessage = "Transaction Date is required")]
    public DateTime TransactionDate { get; set; }
    [Display(Name = "Due Date")]
    [DateGreaterThan("TransactionDate", ErrorMessage = "Due Date must be later than Transaction Date")]
    [DataType(DataType.Date)]
    [Required(ErrorMessage = "Due Date is required")]
    public DateTime DueDate { get; set; }
    [DataType(DataType.Currency, ErrorMessage = "Total must be a currency value")]
    [Required(ErrorMessage = "Total is required")]
    public decimal? Total { get; set; }
    [Required(ErrorMessage = "Status must be paid, due or canceled")]
    public String? Status { get; set; }
  }

}

// For validation of DueDate > TransactionDate
public class DateGreaterThanAttribute : ValidationAttribute
{
    private readonly string _comparisonProperty;

    public DateGreaterThanAttribute(string comparisonProperty)
    {
        _comparisonProperty = comparisonProperty;
    }

    protected override ValidationResult IsValid(object? value, ValidationContext validationContext)
    {
        ErrorMessage = ErrorMessageString;
        var currentValue = (DateTime?)value;

        var property = validationContext.ObjectType.GetProperty(_comparisonProperty);

        if (property == null)
            throw new ArgumentException("Property with this name not found");

        var comparisonValue = (DateTime?)property.GetValue(validationContext.ObjectInstance);

        if (currentValue <= comparisonValue)
            return new ValidationResult(ErrorMessage);

        return ValidationResult.Success!;
    }
}

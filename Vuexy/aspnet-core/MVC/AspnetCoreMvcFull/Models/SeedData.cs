using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.DependencyInjection;
using System;
using System.Linq;
using AspnetCoreMvcFull.Data;

namespace AspnetCoreMvcFull.Models
{
    public static class SeedData
    {
        public static void Initialize(IServiceProvider serviceProvider)
        {
            using (var context = new AspnetCoreMvcFullContext(
                serviceProvider.GetRequiredService<DbContextOptions<AspnetCoreMvcFullContext>>()))
            {
                if (context == null || context.Transactions == null)
                {
                    throw new ArgumentNullException("Null AspnetCoreMvcFullContext");
                }

                // Look for any transactions.
                if (context.Transactions.Any())
                {
                    return;   // DB has been seeded
                }

                context.Transactions.AddRange(
                    new Transactions
                    {
                        Customer = "John Doe",
                        TransactionDate = DateTime.Parse("2023-01-01"),
                        DueDate = DateTime.Parse("2023-01-10"),
                        Total = 100.50m,
                        Status = "paid"
                    },
                    new Transactions
                    {
                        Customer = "Jane Smith",
                        TransactionDate = DateTime.Parse("2023-02-15"),
                        DueDate = DateTime.Parse("2023-02-28"),
                        Total = 75.20m,
                        Status = "due"
                    },
                    new Transactions
                    {
                        Customer = "Bob Johnson",
                        TransactionDate = DateTime.Parse("2023-03-10"),
                        DueDate = DateTime.Parse("2023-03-15"),
                        Total = 50.75m,
                        Status = "canceled"
                    },
                    new Transactions
                    {
                        Customer = "Oliver Freeman",
                        TransactionDate = DateTime.Parse("2023-03-11"),
                        DueDate = DateTime.Parse("2023-03-25"),
                        Total = 90.65m,
                        Status = "due"
                    },
                    new Transactions
                    {
                        Customer = "George Washington",
                        TransactionDate = DateTime.Parse("2023-05-10"),
                        DueDate = DateTime.Parse("2023-07-15"),
                        Total = 60.25m,
                        Status = "paid"
                    }
                );
                context.SaveChanges();
            }
        }
    }
}

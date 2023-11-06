# Set the base image to use
FROM gcc:latest
# Copy the C program into the container
COPY SalesReport.c .
# Compile the C program
RUN gcc -o SalesReport SalesReport.c
# Set the command to run when the container starts
CMD ["./SalesReport"]
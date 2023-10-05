# Use an official Node.js runtime as a base image
FROM node:14

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy your project files into the container
COPY ./src /var/www/html

# Expose a port if needed
# EXPOSE 3000

# Install project dependencies using npm (if needed)
# RUN npm install

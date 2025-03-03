FROM node:lts-alpine

WORKDIR /app

COPY . .

RUN npm install && npm install -g npm@latest

EXPOSE 5173

CMD ["npm", "run", "dev"]
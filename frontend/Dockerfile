FROM node:lts-alpine

WORKDIR /app

COPY . .

RUN npm install

RUN npm run build

EXPOSE 5173
# or: npm run dev (if development)
CMD ["npm", "run", "preview"]
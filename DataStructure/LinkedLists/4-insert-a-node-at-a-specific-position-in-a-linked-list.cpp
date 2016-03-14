#include <cstdio>
#include <stdlib.h>

struct Node
{
    int data;
    Node* next;
};

Node* Insert(Node* head, int data, int position);

int main(int argc, char const *argv[])
{
    Node* head;
    head = Insert(head, 1, 0);
    head = Insert(head, 2, 0);

    while (head != NULL) {
        printf("%d ", head->data);
        head = head->next;
    }

    return 0;
}

Node* Insert(Node* head, int data, int position)
{
   //  Node* temp1 = new Node();
   //  temp1->data = data;
   //  temp1->next = NULL;
   //  if (position == 0) {
   //      temp1->next = head;
   //      head = temp1;
   //  } else {
   //      Node* temp2 = head;

   //      for (int i = 0; i < position - 1; i ++) {
   //          temp2 = temp2->next;
   //      }

   //      temp1->next = temp2->next;
   //      temp2->next = temp1;
   //  }
   // return head;

    Node *temp = (Node*)malloc(sizeof(Node));
    temp->data = data;
    temp->next = NULL;

    if (head == NULL) { // empty list
        return temp;
    }

    if (position == 0) { // insert to head.
       temp->next = head;
       return temp;
    }

    Node *current = head;
    while (position > 1) {
        current = current->next;
        position --;
    }

    temp->next = current->next;
    current->next = temp;

    return head;
}
